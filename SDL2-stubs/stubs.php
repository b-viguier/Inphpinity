<?php
function SDL_Init($flags)
{
}
function SDL_InitSubSystem($flags)
{
}
function SDL_Quit()
{
}
function SDL_QuitSubSystem($flags)
{
}
function SDL_WasInit($flags)
{
}
function SDL_CreateWindow($title, $x, $y, $w, $h, $flags)
{
}
function SDL_CreateShapedWindow($title, $x, $y, $w, $h, $flags)
{
}
function SDL_DestroyWindow(SDL_Window $window)
{
}
function SDL_UpdateWindowSurface(SDL_Window $window)
{
}
function SDL_GetWindowTitle(SDL_Window $window)
{
}
function SDL_SetWindowTitle(SDL_Window $window, $title)
{
}
function SDL_GetWindowDisplayIndex(SDL_Window $window)
{
}
function SDL_ShowWindow(SDL_Window $window)
{
}
function SDL_HideWindow(SDL_Window $window)
{
}
function SDL_RaiseWindow(SDL_Window $window)
{
}
function SDL_MaximizeWindow(SDL_Window $window)
{
}
function SDL_MinimizeWindow(SDL_Window $window)
{
}
function SDL_RestoreWindow(SDL_Window $window)
{
}
function SDL_GetWindowSurface(SDL_Window $window)
{
}
function SDL_SetWindowDisplayMode(SDL_Window $window, SDL_DisplayMode $displaymode)
{
}
function SDL_GetWindowDisplayMode(SDL_Window $window, $displaymode)
{
}
function SDL_GetWindowPixelFormat(SDL_Window $window)
{
}
function SDL_GetWindowID(SDL_Window $window)
{
}
function SDL_GetWindowFromID($id)
{
}
function SDL_GetWindowFlags(SDL_Window $window)
{
}
function SDL_SetWindowIcon(SDL_Window $window, SDL_Surface $icon)
{
}
function SDL_SetWindowPosition(SDL_Window $window, $x, $y)
{
}
function SDL_GetWindowPosition(SDL_Window $window, $x, $y)
{
}
function SDL_SetWindowSize(SDL_Window $window, $x, $y)
{
}
function SDL_GetWindowSize(SDL_Window $window, $x, $y)
{
}
function SDL_SetWindowMinimumSize(SDL_Window $window, $x, $y)
{
}
function SDL_GetWindowMinimumSize(SDL_Window $window, $x, $y)
{
}
function SDL_SetWindowMaximumSize(SDL_Window $window, $x, $y)
{
}
function SDL_GetWindowMaximumSize(SDL_Window $window, $x, $y)
{
}
function SDL_SetWindowBordered(SDL_Window $window, $bordered)
{
}
function SDL_SetWindowFullscreen(SDL_Window $window, $flags)
{
}
function SDL_UpdateWindowSurfaceRects(SDL_Window $window, array $rects, $numrect)
{
}
function SDL_SetWindowGrab(SDL_Window $window, $grabbed)
{
}
function SDL_GetWindowGrab(SDL_Window $window)
{
}
function SDL_SetWindowBrightness(SDL_Window $window, $brightness)
{
}
function SDL_GetWindowBrightness(SDL_Window $window)
{
}
function SDL_SetWindowGammaRamp(SDL_Window $window, array $red, array $green, array $blue)
{
}
function SDL_GetWindowGammaRamp(SDL_Window $window, $red, $green, $blue)
{
}
function SDL_IsShapedWindow(SDL_Window $window)
{
}
function SDL_SetWindowShape(SDL_Window $window, SDL_Surface $surface, SDL_WindowShapeMode $mode)
{
}
function SDL_GetShapedWindowMode(SDL_Window $window, $shaped_mode)
{
}
function SDL_WINDOWPOS_UNDEFINED_DISPLAY($display)
{
}
function SDL_WINDOWPOS_CENTERED_DISPLAY($display)
{
}
function SDL_GetRevision()
{
}
function SDL_GetRevisionNumber()
{
}
function SDL_GetVersion($version)
{
}
function SDL_VERSION($version)
{
}
function SDL_VERSIONNUM($x, $y, $z)
{
}
function SDL_VERSION_ATLEAST($x, $y, $z)
{
}
function SDL_Delay($ms)
{
}
function SDL_CreateRenderer(SDL_Window $window, $index, $flags)
{
}
function SDL_DestroyRenderer($renderer)
{
}
function SDL_DestroyTexture($texture)
{
}
function SDL_SetRenderDrawColor($renderer, $r, $g, $b, $a)
{
}
function SDL_RenderDrawPoint($renderer, $x, $y)
{
}
function SDL_RenderClear($renderer)
{
}
function SDL_RenderCopy($renderer, $texture, SDL_Rect $srcrect, SDL_Rect $dstrect)
{
}
function SDL_RenderFillRect($renderer, SDL_Rect $rect)
{
}
function SDL_RenderPresent($renderer)
{
}
function SDL_CreateTextureFromSurface($renderer, SDL_Surface $surface)
{
}
function SDL_CreateRGBSurface($flags, $width, $height, $depth, $Rmask, $Gmask, $Bmask, $Amask)
{
}
function SDL_FreeSurface(SDL_Surface $surface)
{
}
function SDL_FillRect(SDL_Surface $surface, $rect, $color)
{
}
function SDL_FillRects(SDL_Surface $surface, $rects, $count, $color)
{
}
function SDL_MUSTLOCK(SDL_Surface $surface)
{
}
function SDL_LockSurface(SDL_Surface $surface)
{
}
function SDL_UnlockSurface(SDL_Surface $surface)
{
}
function SDL_LoadBMP_RW(SDL_RWops $RWops, $freesrc)
{
}
function SDL_LoadBMP($path): \SDL_Surface
{
}
function SDL_UpperBlit(SDL_Surface $src, SDL_rect $srcrect, SDL_Surface $dst, SDL_rect $dstrect)
{
}
function SDL_LowerBlit(SDL_Surface $src, SDL_rect $srcrect, SDL_Surface $dst, SDL_rect $dstrect)
{
}
function SDL_UpperBlitScaled(SDL_Surface $src, SDL_rect $srcrect, SDL_Surface $dst, SDL_rect $dstrect)
{
}
function SDL_LowerBlitScaled(SDL_Surface $src, SDL_rect $srcrect, SDL_Surface $dst, SDL_rect $dstrect)
{
}
function SDL_SoftStretch(SDL_Surface $src, SDL_rect $srcrect, SDL_Surface $dst, SDL_rect $dstrect)
{
}
function SDL_SaveBMP_RW(SDL_Surface $surface, SDL_RWops $rwops, $freedst)
{
}
function SDL_SaveBMP(SDL_Surface $surface, $path)
{
}
function SDL_SetSurfaceRLE(SDL_Surface $surface, $flag)
{
}
function SDL_SetColorKey(SDL_Surface $surface, $flag, $key)
{
}
function SDL_GetColorKey(SDL_Surface $surface, $key)
{
}
function SDL_SetSurfaceColorMod(SDL_Surface $surface, $red, $green, $blue)
{
}
function SDL_GetSurfaceColorMod(SDL_Surface $surface, $red, $green, $blue)
{
}
function SDL_SetSurfaceAlphaMod(SDL_Surface $surface, $alpha)
{
}
function SDL_GetSurfaceAlphaMod(SDL_Surface $surface, $alpha)
{
}
function SDL_SetSurfaceBlendMode(SDL_Surface $surface, $blendmmode)
{
}
function SDL_GetSurfaceBlendMode(SDL_Surface $surface, $blendmode)
{
}
function SDL_SetClipRect(SDL_Surface $surface, $cliprect)
{
}
function SDL_GetClipRect(SDL_Surface $surface, $cliprect)
{
}
function SDL_ConvertSurface(SDL_Surface $surface, SDL_PixelFormat $format, $flags)
{
}
function SDL_ConvertSurfaceFormat(SDL_Surface $surface, $format, $flags)
{
}
function SDL_ConvertPixels($height, $width, $src_format, SDL_Pixels $src, $src_pitch, $dst_format, SDL_Pixels $dst, $dst_pitch)
{
}
function SDL_RectEmpty(SDL_Rect $rect)
{
}
function SDL_RectEquals(SDL_Rect $rectA, SDL_Rect $rectB)
{
}
function SDL_HasIntersection(SDL_Rect $rectA, SDL_Rect $rectB)
{
}
function SDL_IntersectRect(SDL_Rect $rectA, SDL_Rect $rectB, $result)
{
}
function SDL_UnionRect(SDL_Rect $rectA, SDL_Rect $rectB, $result)
{
}
function SDL_IntersectRectAndLine(SDL_Rect $rect, $X1, $Y1, $X2, $Y2)
{
}
function SDL_EnclosePoints(array $point, $count, SDL_Rect $clip, $rect)
{
}
function SDL_WaitEvent(SDL_Event $event)
{
}
function SDL_PollEvent(SDL_Event $event)
{
}
function SDL_ShowSimpleMessageBox($flags, $title, $message, SDL_Window $window)
{
}
function SDL_ShowMessageBox($messageboxdata, $buttonid)
{
}
function SDL_GetPixelFormatName($format)
{
}
function SDL_PixelFormatEnumToMasks($format, $bpp, $Rmask, $Gmask, $Bmask, $Amask)
{
}
function SDL_MasksToPixelFormatEnum($bpp, $Rmask, $Gmask, $Bmask, $Amask)
{
}
function SDL_AllocPalette($ncolors)
{
}
function SDL_FreePalette(SDL_Palette $palette)
{
}
function SDL_SetPaletteColors(SDL_Palette $palette, array $colors, $first, $ncolors)
{
}
function SDL_AllocFormat($format)
{
}
function SDL_FreeFormat(SDL_PixelFormat $format)
{
}
function SDL_SetPixelFormatPalette(SDL_PixelFormat $pixelformat, SDL_Palette $palette)
{
}
function SDL_MapRGB($pixelformat, $r, $g, $b)
{
}
function SDL_MapRGBA(SDL_PixelFormat $pixelformat, $r, $g, $b, $a)
{
}
function SDL_GetRGB($pixel, SDL_PixelFormat $format, $r, $g, $b)
{
}
function SDL_GetRGBA($pixel, SDL_PixelFormat $format, $r, $g, $b, $a)
{
}
function SDL_CalculateGammaRamp($gamma, $ramp)
{
}
function SDL_GetBasePath()
{
}
function SDL_GetPrefPath($org, $app)
{
}
function SDL_GL_ExtensionSupported($extension)
{
}
function SDL_GL_SetAttribute($attr, $value)
{
}
function SDL_GL_GetAttribute($attr, $value)
{
}
function SDL_GL_CreateContext(SDL_Window $window)
{
}
function SDL_GL_DeleteContext(SDL_GLContext $GLcontext)
{
}
function SDL_GL_MakeCurrent(SDL_Window $window, SDL_GLContext $context)
{
}
function SDL_GL_GetCurrentWindow()
{
}
function SDL_GL_GetCurrentContext()
{
}
function SDL_GL_GetDrawableSize(SDL_Window $window, $w, $h)
{
}
function SDL_GL_SwapWindow(SDL_Window $window)
{
}
function SDL_GL_SetSwapInterval($interval)
{
}
function SDL_GL_GetSwapInterval()
{
}
function SDL_GetCPUCount()
{
}
function SDL_GetCPUCacheLineSize()
{
}
function SDL_HasRDTSC()
{
}
function SDL_HasAltiVec()
{
}
function SDL_HasMMX()
{
}
function SDL_Has3DNow()
{
}
function SDL_HasSSE()
{
}
function SDL_HasSSE2()
{
}
function SDL_HasSSE3()
{
}
function SDL_HasSSE41()
{
}
function SDL_HasSSE42()
{
}
function SDL_GetSystemRAM()
{
}
function SDL_SetError($error_message)
{
}
function SDL_GetError()
{
}
function SDL_ClearError()
{
}
function SDL_GetNumVideoDrivers()
{
}
function SDL_GetVideoDriver($driverIndex)
{
}
function SDL_VideoInit($drivername)
{
}
function SDL_VideoQuit()
{
}
function SDL_GetCurrentVideoDriver()
{
}
function SDL_GetNumVideoDisplays()
{
}
function SDL_GetDisplayName($displayIndex)
{
}
function SDL_GetDisplayBounds($displayIndex, $rect)
{
}
function SDL_GetNumDisplayModes($displayIndex)
{
}
function SDL_GetDisplayMode($displayIndex, $modeIndex)
{
}
function SDL_GetDesktopDisplayMode($displayIndex)
{
}
function SDL_GetCurrentDisplayMode($displayIndex)
{
}
function SDL_GetClosestDisplayMode($displayIndex, SDL_DisplayMode $desired, $closest)
{
}
function SDL_IsScreenSaverEnabled()
{
}
function SDL_EnableScreenSaver()
{
}
function SDL_DisableScreenSaver()
{
}
function SDL_GetPowerInfo($secs, $pct)
{
}
function SDL_GetPlatform()
{
}
function SDL_GetKeyboardFocus()
{
}
function SDL_GetKeyboardState(int &$numkeys, bool $allkeys): array
{
}
function SDL_GetModState()
{
}
function SDL_SetModState($modstate)
{
}
function SDL_GetKeyFromScancode($scancode)
{
}
function SDL_GetScancodeFromKey($key)
{
}
function SDL_GetScancodeName($scancode)
{
}
function SDL_GetScancodeFromName($name)
{
}
function SDL_GetKeyName($key)
{
}
function SDL_GetKeyFromName($name)
{
}
function SDL_StartTextInput()
{
}
function SDL_IsTextInputActive()
{
}
function SDL_StopTextInput()
{
}
function SDL_SetTextInputRect(SDL_Rect $rect)
{
}
function SDL_HasScreenKeyboardSupport()
{
}
function SDL_IsScreenKeyboardShown(SDL_Window $window)
{
}
function SDL_CreateCursor($data, $mask, $w, $h, $hot_x, $hot_y)
{
}
function SDL_CreateSystemCursor($id)
{
}
function SDL_CreateColorCursor(SDL_Surface $surface, $hot_x, $hot_y)
{
}
function SDL_FreeCursor(SDL_Cursor $cursor)
{
}
function SDL_SetCursor(SDL_Cursor $cursor)
{
}
function SDL_GetCursor()
{
}
function SDL_GetDefaultCursor()
{
}
function SDL_ShowCursor($toggle)
{
}
function SDL_GetMouseFocus()
{
}
function SDL_GetMouseState($x, $y)
{
}
function SDL_GetRelativeMouseState($x, $y)
{
}
function SDL_WarpMouseInWindow(SDL_Window $window, $x, $y)
{
}
function SDL_SetRelativeMouseMode($enabled)
{
}
function SDL_GetRelativeMouseMode()
{
}
function SDL_CreateMutex()
{
}
function SDL_LockMutex(SDL_mutex $mutex)
{
}
function SDL_TryLockMutex(SDL_mutex $mutex)
{
}
function SDL_UnlockMutex(SDL_mutex $mutex)
{
}
function SDL_DestroyMutex(SDL_mutex $mutex)
{
}
function SDL_mutexP(SDL_mutex $mutex)
{
}
function SDL_mutexV(SDL_mutex $mutex)
{
}
function SDL_CreateSemaphore($value)
{
}
function SDL_SemWait(SDL_sem $semaphore)
{
}
function SDL_SemTryWait(SDL_sem $semaphore)
{
}
function SDL_SemPost(SDL_sem $semaphore)
{
}
function SDL_SemValue(SDL_sem $semaphore)
{
}
function SDL_SemWaitTimeout(SDL_sem $semaphore, $ms)
{
}
function SDL_DestroySemaphore(SDL_sem $semaphore)
{
}
function SDL_CreateCond()
{
}
function SDL_CondWait(SDL_cond $condition, SDL_mutex $mutex)
{
}
function SDL_CondSignal(SDL_cond $condition)
{
}
function SDL_CondBroadcast(SDL_cond $condition)
{
}
function SDL_CondWaitTimeout(SDL_cond $condition, SDL_mutex $mutex, $ms)
{
}
function SDL_DestroyCond(SDL_cond $condition)
{
}
function SDL_AllocRW()
{
}
function SDL_FreeRW(SDL_RWops $RWops)
{
}
function SDL_RWFromFile($path, $mode)
{
}
function SDL_RWFromFP($fp, $autoclose)
{
}
function SDL_RWFromMem($buf, $size)
{
}
function SDL_RWFromConstMem($buf, $size)
{
}
function SDL_RWsize(SDL_RWops $RWops)
{
}
function SDL_RWseek(SDL_RWops $RWops, $offset, $whence)
{
}
function SDL_RWtell(SDL_RWops $RWops)
{
}
function SDL_RWread(SDL_RWops $RWops, $buffer, $size, $number)
{
}
function SDL_RWwrite(SDL_RWops $RWops, $buffer, $size, $number)
{
}
function SDL_RWclose(SDL_RWops $RWops)
{
}
function SDL_ReadU8(SDL_RWops $RWops)
{
}
function SDL_ReadLE16(SDL_RWops $RWops)
{
}
function SDL_ReadBE16(SDL_RWops $RWops)
{
}
function SDL_ReadLE32(SDL_RWops $RWops)
{
}
function SDL_ReadBE32(SDL_RWops $RWops)
{
}
function SDL_ReadLE64(SDL_RWops $RWops)
{
}
function SDL_ReadBE64(SDL_RWops $RWops)
{
}
function SDL_WriteU8(SDL_RWops $RWops, $value)
{
}
function SDL_WriteLE16(SDL_RWops $RWops, $value)
{
}
function SDL_WriteBE16(SDL_RWops $RWops, $value)
{
}
function SDL_WriteLE32(SDL_RWops $RWops, $value)
{
}
function SDL_WriteBE32(SDL_RWops $RWops, $value)
{
}
function SDL_WriteLE64(SDL_RWops $RWops, $value)
{
}
function SDL_WriteBE64(SDL_RWops $RWops, $value)
{
}

class SDL_Event
{
    public function __construct()
    {
    }
    public function __toString() : string
    {
    }
    public $type;
    public $key;
    public $motion;
}

class SDL_GLContext
{
    public function __construct(SDL_Window $window)
    {
    }
    public function __toString() : string
    {
    }
    public function Delete()
    {
    }
    public static function GL_GetCurrent()
    {
    }
}

class SDL_MessageBoxColor
{
    public function __construct($r, $g, $b)
    {
    }
    public function __toString() : string
    {
    }
    public $r;
    public $g;
    public $b;
}

class SDL_MessageBoxButtonData
{
    public function __construct($flags, $buttonid, $text)
    {
    }
    public function __toString() : string
    {
    }
    public $flags;
    public $buttonid;
    public $text;
}

class SDL_MessageBoxData
{
    public function __construct($flags, $title, $message, array $buttons, array $colors, SDL_Window $parentwindow)
    {
    }
    public function __toString() : string
    {
    }
    public function Show($buttonid)
    {
    }
    public $flags;
    public $title;
    public $message;
    public $window;
    public $numbuttons;
    public $buttons;
    public $colors;
}

class SDL_Cursor
{
    public function __construct($data, $mask, $w, $h, $hot_x, $hot_y)
    {
    }
    public function __toString() : string
    {
    }
    public function Free()
    {
    }
    public function Set()
    {
    }
    public static function Create($data, $mask, $w, $h, $hot_x, $hot_y)
    {
    }
    public static function CreateSystem($id)
    {
    }
    public static function CreateColor(SDL_Surface $surface, $hot_x, $hot_y)
    {
    }
    public static function Get()
    {
    }
    public static function GetDefault()
    {
    }
    public static function Show($toggle)
    {
    }
}

class SDL_mutex
{
    public function __construct()
    {
    }
    public function __toString() : string
    {
    }
    public function Lock()
    {
    }
    public function TryLock()
    {
    }
    public function Unlock()
    {
    }
    public function Destroy()
    {
    }
}

class SDL_sem
{
    public function __construct($value)
    {
    }
    public function __toString() : string
    {
    }
    public function Wait()
    {
    }
    public function TryWait()
    {
    }
    public function Post()
    {
    }
    public function Value()
    {
    }
    public function WaitTimeout($ms)
    {
    }
    public function Destroy()
    {
    }
}

class SDL_cond
{
    public function __construct()
    {
    }
    public function __toString() : string
    {
    }
    public function Wait(SDL_mutex $mutex)
    {
    }
    public function Signal()
    {
    }
    public function Broadcast()
    {
    }
    public function WaitTimeout(SDL_mutex $mutex, $ms)
    {
    }
    public function Destroy()
    {
    }
}

class SDL_Color
{
    public function __construct($r, $g, $b, $a)
    {
    }
    public function __toString() : string
    {
    }
    public $r;
    public $g;
    public $b;
    public $a;
}

class SDL_Palette
{
    public function __construct($ncolors)
    {
    }
    public function __toString() : string
    {
    }
    public function count()
    {
    }
    public function offsetExists($offset)
    {
    }
    public function offsetGet($offset)
    {
    }
    public function offsetSet($offset, $color)
    {
    }
    public function offsetUnset($offset)
    {
    }
    public function Free()
    {
    }
    public function SetColors(array $colors, $first, $ncolors)
    {
    }
    public $ncolors;
    public $version;
    public $refcount;
    public $colors;
}

class SDL_PixelFormat
{
    public function __construct($format)
    {
    }
    public function __toString() : string
    {
    }
    public function GetRGB($pixel, $r, $g, $b)
    {
    }
    public function GetRGBA($pixel, $r, $g, $b, $a)
    {
    }
    public function Free()
    {
    }
    public function SetPalette(SDL_Palette $palette)
    {
    }
    public function MapRGB($r, $g, $b)
    {
    }
    public function MapRGBA($r, $g, $b, $a)
    {
    }
    public $format;
    public $BitsPerPixel;
    public $BytesPerPixel;
    public $Rmask;
    public $Gmask;
    public $Bmask;
    public $Amask;
    public $Rloss;
    public $Gloss;
    public $Bloss;
    public $Aloss;
    public $Rshift;
    public $Gshift;
    public $Bshift;
    public $Ashift;
    public $palette;
}

class SDL_Pixels
{
    public function __construct($pitch, $h)
    {
    }
    public function __toString() : string
    {
    }
    public function count()
    {
    }
    public function offsetExists($offset)
    {
    }
    public function offsetGet($offset)
    {
    }
    public function offsetSet($offset, $value)
    {
    }
    public function offsetUnset($offset)
    {
    }
    public function GetByte($x, $y)
    {
    }
    public function SetByte($x, $y, $byte)
    {
    }
    public $pitch;
    public $h;
    public $count;
}

class SDL_Rect
{
    public function __construct(int $x, int $y, int $w, int $h)
    {
    }
    public function __toString() : string
    {
    }
    public function Empty()
    {
    }
    public function Equal(SDL_Rect $rect)
    {
    }
    public function HasIntersection(SDL_Rect $rect)
    {
    }
    public function Intersect(SDL_Rect $rect, $result)
    {
    }
    public function Union(SDL_Rect $rect, $result)
    {
    }
    public function IntersectLine($X1, $Y1, $X2, $Y2)
    {
    }
    public $x;
    public $y;
    public $w;
    public $h;
}

class SDL_Point
{
    public function __construct($x, $y)
    {
    }
    public function __toString() : string
    {
    }
    public $x;
    public $y;
}

class SDL_RWops
{
    public function __construct()
    {
    }
    public function __toString() : string
    {
    }
    public function Free()
    {
    }
    public function Size()
    {
    }
    public function Seek($offset, $whence)
    {
    }
    public function Tell()
    {
    }
    public function Read($buffer, $size, $number)
    {
    }
    public function Write($buffer, $size, $number)
    {
    }
    public function Close()
    {
    }
    public function ReadU8()
    {
    }
    public function ReadLE16()
    {
    }
    public function ReadBE16()
    {
    }
    public function ReadLE32()
    {
    }
    public function ReadBE32()
    {
    }
    public function ReadLE64()
    {
    }
    public function ReadBE64()
    {
    }
    public function WriteU8($value)
    {
    }
    public function WriteLE16($value)
    {
    }
    public function WriteBE16($value)
    {
    }
    public function WriteLE32($value)
    {
    }
    public function WriteBE32($value)
    {
    }
    public function WriteLE64($value)
    {
    }
    public function WriteBE64($value)
    {
    }
    public static function FromFile($path, $mode)
    {
    }
    public static function FromFP($fp, $autoclose)
    {
    }
    public static function FromMem($buf, $size)
    {
    }
    public static function FromConstMem($buf, $size)
    {
    }
    public $type;
}

class SDL_WindowShapeMode
{
    public function __construct($mode, $parameter)
    {
    }
    public function __toString() : string
    {
    }
    public $mode;
    public $colorKey;
    public $binarizationCutoff;
}

class SDL_Surface
{
    public function __construct($flags, $width, $height, $depth, $Rmask, $Gmask, $Bmask, $Amask)
    {
    }
    public function __toString() : string
    {
    }
    public function Free()
    {
    }
    public function FillRect($rect, $color)
    {
    }
    public function FillRects($rects, $count, $color)
    {
    }
    public function MustLock()
    {
    }
    public function Lock()
    {
    }
    public function Unlock()
    {
    }
    public function Blit(SDL_rect $srcrect, SDL_Surface $dst, SDL_rect $dstrect)
    {
    }
    public function UpperBlit(SDL_rect $srcrect, SDL_Surface $dst, SDL_rect $dstrect)
    {
    }
    public function LowerBlit(SDL_rect $srcrect, SDL_Surface $dst, SDL_rect $dstrect)
    {
    }
    public function BlitScaled(SDL_rect $srcrect, SDL_Surface $dst, SDL_rect $dstrect)
    {
    }
    public function UpperBlitScaled(SDL_rect $srcrect, SDL_Surface $dst, SDL_rect $dstrect)
    {
    }
    public function LowerBlitScaled(SDL_rect $srcrect, SDL_Surface $dst, SDL_rect $dstrect)
    {
    }
    public function SoftStretch(SDL_rect $srcrect, SDL_Surface $dst, SDL_rect $dstrect)
    {
    }
    public function SaveBMP_RW(SDL_RWops $rwops, $freedst)
    {
    }
    public function SaveBMP($path)
    {
    }
    public function SetRLE($flag)
    {
    }
    public function SetColorKey($flag, $key)
    {
    }
    public function GetColorKey($key)
    {
    }
    public function SetColorMod($red, $green, $blue)
    {
    }
    public function GetColorMod($red, $green, $blue)
    {
    }
    public function SetAlphaMod($alpha)
    {
    }
    public function GetAlphaMod($alpha)
    {
    }
    public function SetBlendMode($blendmmode)
    {
    }
    public function GetBlendMode($blendmode)
    {
    }
    public function SetClipRect($cliprect)
    {
    }
    public function GetClipRect($cliprect)
    {
    }
    public function Convert(SDL_PixelFormat $format, $flags)
    {
    }
    public function ConvertFormat($format, $flags)
    {
    }
    public static function LoadRW(SDL_RWops $RWops, $freesrc)
    {
    }
    public static function LoadBMP($path)
    {
    }
    public $flags;
    public $w;
    public $h;
    public $pitch;
    public $format;
    public $clip_rect;
    public $pixels;
}

class SDL_DisplayMode
{
    public function __construct($format, $w, $h, $refresh_rate)
    {
    }
    public function __toString() : string
    {
    }
    public $format;
    public $w;
    public $h;
    public $refresh_rate;
}

class SDL_Window
{
    public function __construct($title, $x, $y, $w, $h, $flags)
    {
    }
    public function __toString() : string
    {
    }
    public function UpdateSurface()
    {
    }
    public function Destroy()
    {
    }
    public function GetTitle()
    {
    }
    public function SetTitle($title)
    {
    }
    public function GetDisplayIndex()
    {
    }
    public function Show()
    {
    }
    public function Hide()
    {
    }
    public function Raise()
    {
    }
    public function Maximize()
    {
    }
    public function Minimize()
    {
    }
    public function Restore()
    {
    }
    public function GetSurface()
    {
    }
    public function SetDisplayMode(SDL_DisplayMode $displaymode)
    {
    }
    public function GetDisplayMode($displaymode)
    {
    }
    public function GetPixelFormat()
    {
    }
    public function GetID()
    {
    }
    public function GetFlags()
    {
    }
    public function SetIcon(SDL_Surface $icon)
    {
    }
    public function SetPosition($x, $y)
    {
    }
    public function GetPosition($x, $y)
    {
    }
    public function SetSize($x, $y)
    {
    }
    public function GetSize($x, $y)
    {
    }
    public function SetMinimumSize($x, $y)
    {
    }
    public function GetMinimumSize($x, $y)
    {
    }
    public function SetMaximumSize($x, $y)
    {
    }
    public function GetMaximumSize($x, $y)
    {
    }
    public function SetBordered($bordered)
    {
    }
    public function SetFullscreen($flags)
    {
    }
    public function UpdateSurfaceRects(array $rects, $numrect)
    {
    }
    public function SetGrab($grabbed)
    {
    }
    public function GetGrab()
    {
    }
    public function SetBrightness($brightness)
    {
    }
    public function GetBrightness()
    {
    }
    public function SetGammaRamp(array $red, array $green, array $blue)
    {
    }
    public function GetGammaRamp($red, $green, $blue)
    {
    }
    public function GL_CreateContext()
    {
    }
    public function GL_MakeCurrent(SDL_GLContext $GLcontext)
    {
    }
    public function GL_GetDrawableSize($x, $y)
    {
    }
    public function GL_Swap()
    {
    }
    public function WarpMouse($x, $y)
    {
    }
    public function IsShaped()
    {
    }
    public function SetShape(SDL_Surface $surface, SDL_WindowShapeMode $mode)
    {
    }
    public function GetShapedMode($shaped_mode)
    {
    }
    public static function GL_GetCurrent()
    {
    }
    public static function GetMouseFocus()
    {
    }
    public static function GetFromID($id)
    {
    }
    public $id;
    public $flags;
    public $x;
    public $y;
    public $w;
    public $h;
    public $title;
}
define('SDL_BLENDMODE_NONE', 0);
define('SDL_BLENDMODE_BLEND', 1);
define('SDL_BLENDMODE_ADD', 2);
define('SDL_BLENDMODE_MOD', 4);
define('SDL_QUIT', 256);
define('SDL_APP_TERMINATING', 257);
define('SDL_APP_LOWMEMORY', 258);
define('SDL_APP_WILLENTERBACKGROUND', 259);
define('SDL_APP_DIDENTERBACKGROUND', 260);
define('SDL_APP_WILLENTERFOREGROUND', 261);
define('SDL_APP_DIDENTERFOREGROUND', 262);
define('SDL_WINDOWEVENT', 512);
define('SDL_SYSWMEVENT', 513);
define('SDL_KEYDOWN', 768);
define('SDL_KEYUP', 769);
define('SDL_TEXTEDITING', 770);
define('SDL_TEXTINPUT', 771);
define('SDL_MOUSEMOTION', 1024);
define('SDL_MOUSEBUTTONDOWN', 1025);
define('SDL_MOUSEBUTTONUP', 1026);
define('SDL_MOUSEWHEEL', 1027);
define('SDL_GL_RED_SIZE', 0);
define('SDL_GL_GREEN_SIZE', 1);
define('SDL_GL_BLUE_SIZE', 2);
define('SDL_GL_ALPHA_SIZE', 3);
define('SDL_GL_BUFFER_SIZE', 4);
define('SDL_GL_DOUBLEBUFFER', 5);
define('SDL_GL_DEPTH_SIZE', 6);
define('SDL_GL_STENCIL_SIZE', 7);
define('SDL_GL_ACCUM_RED_SIZE', 8);
define('SDL_GL_ACCUM_GREEN_SIZE', 9);
define('SDL_GL_ACCUM_BLUE_SIZE', 10);
define('SDL_GL_ACCUM_ALPHA_SIZE', 11);
define('SDL_GL_STEREO', 12);
define('SDL_GL_MULTISAMPLEBUFFERS', 13);
define('SDL_GL_MULTISAMPLESAMPLES', 14);
define('SDL_GL_ACCELERATED_VISUAL', 15);
define('SDL_GL_RETAINED_BACKING', 16);
define('SDL_GL_SHARE_WITH_CURRENT_CONTEXT', 22);
define('SDL_GL_FRAMEBUFFER_SRGB_CAPABLE', 23);
define('SDL_GL_CONTEXT_MAJOR_VERSION', 17);
define('SDL_GL_CONTEXT_MINOR_VERSION', 18);
define('SDL_GL_CONTEXT_EGL', 19);
define('SDL_GL_CONTEXT_FLAGS', 20);
define('SDL_GL_CONTEXT_PROFILE_MASK', 21);
define('SDL_GL_CONTEXT_PROFILE_CORE', 1);
define('SDL_GL_CONTEXT_PROFILE_COMPATIBILITY', 2);
define('SDL_GL_CONTEXT_PROFILE_ES', 4);
define('SDL_GL_CONTEXT_DEBUG_FLAG', 1);
define('SDL_GL_CONTEXT_FORWARD_COMPATIBLE_FLAG', 2);
define('SDL_GL_CONTEXT_ROBUST_ACCESS_FLAG', 4);
define('SDL_GL_CONTEXT_RESET_ISOLATION_FLAG', 8);
define('SDL_SCANCODE_UNKNOWN', 0);
define('SDL_SCANCODE_A', 4);
define('SDL_SCANCODE_B', 5);
define('SDL_SCANCODE_C', 6);
define('SDL_SCANCODE_D', 7);
define('SDL_SCANCODE_E', 8);
define('SDL_SCANCODE_F', 9);
define('SDL_SCANCODE_G', 10);
define('SDL_SCANCODE_H', 11);
define('SDL_SCANCODE_I', 12);
define('SDL_SCANCODE_J', 13);
define('SDL_SCANCODE_K', 14);
define('SDL_SCANCODE_L', 15);
define('SDL_SCANCODE_M', 16);
define('SDL_SCANCODE_N', 17);
define('SDL_SCANCODE_O', 18);
define('SDL_SCANCODE_P', 19);
define('SDL_SCANCODE_Q', 20);
define('SDL_SCANCODE_R', 21);
define('SDL_SCANCODE_S', 22);
define('SDL_SCANCODE_T', 23);
define('SDL_SCANCODE_U', 24);
define('SDL_SCANCODE_V', 25);
define('SDL_SCANCODE_W', 26);
define('SDL_SCANCODE_X', 27);
define('SDL_SCANCODE_Y', 28);
define('SDL_SCANCODE_Z', 29);
define('SDL_SCANCODE_1', 30);
define('SDL_SCANCODE_2', 31);
define('SDL_SCANCODE_3', 32);
define('SDL_SCANCODE_4', 33);
define('SDL_SCANCODE_5', 34);
define('SDL_SCANCODE_6', 35);
define('SDL_SCANCODE_7', 36);
define('SDL_SCANCODE_8', 37);
define('SDL_SCANCODE_9', 38);
define('SDL_SCANCODE_0', 39);
define('SDL_SCANCODE_RETURN', 40);
define('SDL_SCANCODE_ESCAPE', 41);
define('SDL_SCANCODE_BACKSPACE', 42);
define('SDL_SCANCODE_TAB', 43);
define('SDL_SCANCODE_SPACE', 44);
define('SDL_SCANCODE_MINUS', 45);
define('SDL_SCANCODE_EQUALS', 46);
define('SDL_SCANCODE_LEFTBRACKET', 47);
define('SDL_SCANCODE_RIGHTBRACKET', 48);
define('SDL_SCANCODE_BACKSLASH', 49);
define('SDL_SCANCODE_NONUSHASH', 50);
define('SDL_SCANCODE_SEMICOLON', 51);
define('SDL_SCANCODE_APOSTROPHE', 52);
define('SDL_SCANCODE_GRAVE', 53);
define('SDL_SCANCODE_COMMA', 54);
define('SDL_SCANCODE_PERIOD', 55);
define('SDL_SCANCODE_SLASH', 56);
define('SDL_SCANCODE_CAPSLOCK', 57);
define('SDL_SCANCODE_F1', 58);
define('SDL_SCANCODE_F2', 59);
define('SDL_SCANCODE_F3', 60);
define('SDL_SCANCODE_F4', 61);
define('SDL_SCANCODE_F5', 62);
define('SDL_SCANCODE_F6', 63);
define('SDL_SCANCODE_F7', 64);
define('SDL_SCANCODE_F8', 65);
define('SDL_SCANCODE_F9', 66);
define('SDL_SCANCODE_F10', 67);
define('SDL_SCANCODE_F11', 68);
define('SDL_SCANCODE_F12', 69);
define('SDL_SCANCODE_PRINTSCREEN', 70);
define('SDL_SCANCODE_SCROLLLOCK', 71);
define('SDL_SCANCODE_PAUSE', 72);
define('SDL_SCANCODE_INSERT', 73);
define('SDL_SCANCODE_HOME', 74);
define('SDL_SCANCODE_PAGEUP', 75);
define('SDL_SCANCODE_DELETE', 76);
define('SDL_SCANCODE_END', 77);
define('SDL_SCANCODE_PAGEDOWN', 78);
define('SDL_SCANCODE_RIGHT', 79);
define('SDL_SCANCODE_LEFT', 80);
define('SDL_SCANCODE_DOWN', 81);
define('SDL_SCANCODE_UP', 82);
define('SDL_SCANCODE_NUMLOCKCLEAR', 83);
define('SDL_SCANCODE_KP_DIVIDE', 84);
define('SDL_SCANCODE_KP_MULTIPLY', 85);
define('SDL_SCANCODE_KP_MINUS', 86);
define('SDL_SCANCODE_KP_PLUS', 87);
define('SDL_SCANCODE_KP_ENTER', 88);
define('SDL_SCANCODE_KP_1', 89);
define('SDL_SCANCODE_KP_2', 90);
define('SDL_SCANCODE_KP_3', 91);
define('SDL_SCANCODE_KP_4', 92);
define('SDL_SCANCODE_KP_5', 93);
define('SDL_SCANCODE_KP_6', 94);
define('SDL_SCANCODE_KP_7', 95);
define('SDL_SCANCODE_KP_8', 96);
define('SDL_SCANCODE_KP_9', 97);
define('SDL_SCANCODE_KP_0', 98);
define('SDL_SCANCODE_KP_PERIOD', 99);
define('SDL_SCANCODE_NONUSBACKSLASH', 100);
define('SDL_SCANCODE_APPLICATION', 101);
define('SDL_SCANCODE_POWER', 102);
define('SDL_SCANCODE_KP_EQUALS', 103);
define('SDL_SCANCODE_F13', 104);
define('SDL_SCANCODE_F14', 105);
define('SDL_SCANCODE_F15', 106);
define('SDL_SCANCODE_F16', 107);
define('SDL_SCANCODE_F17', 108);
define('SDL_SCANCODE_F18', 109);
define('SDL_SCANCODE_F19', 110);
define('SDL_SCANCODE_F20', 111);
define('SDL_SCANCODE_F21', 112);
define('SDL_SCANCODE_F22', 113);
define('SDL_SCANCODE_F23', 114);
define('SDL_SCANCODE_F24', 115);
define('SDL_SCANCODE_EXECUTE', 116);
define('SDL_SCANCODE_HELP', 117);
define('SDL_SCANCODE_MENU', 118);
define('SDL_SCANCODE_SELECT', 119);
define('SDL_SCANCODE_STOP', 120);
define('SDL_SCANCODE_AGAIN', 121);
define('SDL_SCANCODE_UNDO', 122);
define('SDL_SCANCODE_CUT', 123);
define('SDL_SCANCODE_COPY', 124);
define('SDL_SCANCODE_PASTE', 125);
define('SDL_SCANCODE_FIND', 126);
define('SDL_SCANCODE_MUTE', 127);
define('SDL_SCANCODE_VOLUMEUP', 128);
define('SDL_SCANCODE_VOLUMEDOWN', 129);
define('SDL_SCANCODE_KP_COMMA', 133);
define('SDL_SCANCODE_KP_EQUALSAS400', 134);
define('SDL_SCANCODE_INTERNATIONAL1', 135);
define('SDL_SCANCODE_INTERNATIONAL2', 136);
define('SDL_SCANCODE_INTERNATIONAL3', 137);
define('SDL_SCANCODE_INTERNATIONAL4', 138);
define('SDL_SCANCODE_INTERNATIONAL5', 139);
define('SDL_SCANCODE_INTERNATIONAL6', 140);
define('SDL_SCANCODE_INTERNATIONAL7', 141);
define('SDL_SCANCODE_INTERNATIONAL8', 142);
define('SDL_SCANCODE_INTERNATIONAL9', 143);
define('SDL_SCANCODE_LANG1', 144);
define('SDL_SCANCODE_LANG2', 145);
define('SDL_SCANCODE_LANG3', 146);
define('SDL_SCANCODE_LANG4', 147);
define('SDL_SCANCODE_LANG5', 148);
define('SDL_SCANCODE_LANG6', 149);
define('SDL_SCANCODE_LANG7', 150);
define('SDL_SCANCODE_LANG8', 151);
define('SDL_SCANCODE_LANG9', 152);
define('SDL_SCANCODE_ALTERASE', 153);
define('SDL_SCANCODE_SYSREQ', 154);
define('SDL_SCANCODE_CANCEL', 155);
define('SDL_SCANCODE_CLEAR', 156);
define('SDL_SCANCODE_PRIOR', 157);
define('SDL_SCANCODE_RETURN2', 158);
define('SDL_SCANCODE_SEPARATOR', 159);
define('SDL_SCANCODE_OUT', 160);
define('SDL_SCANCODE_OPER', 161);
define('SDL_SCANCODE_CLEARAGAIN', 162);
define('SDL_SCANCODE_CRSEL', 163);
define('SDL_SCANCODE_EXSEL', 164);
define('SDL_SCANCODE_KP_00', 176);
define('SDL_SCANCODE_KP_000', 177);
define('SDL_SCANCODE_THOUSANDSSEPARATOR', 178);
define('SDL_SCANCODE_DECIMALSEPARATOR', 179);
define('SDL_SCANCODE_CURRENCYUNIT', 180);
define('SDL_SCANCODE_CURRENCYSUBUNIT', 181);
define('SDL_SCANCODE_KP_LEFTPAREN', 182);
define('SDL_SCANCODE_KP_RIGHTPAREN', 183);
define('SDL_SCANCODE_KP_LEFTBRACE', 184);
define('SDL_SCANCODE_KP_RIGHTBRACE', 185);
define('SDL_SCANCODE_KP_TAB', 186);
define('SDL_SCANCODE_KP_BACKSPACE', 187);
define('SDL_SCANCODE_KP_A', 188);
define('SDL_SCANCODE_KP_B', 189);
define('SDL_SCANCODE_KP_C', 190);
define('SDL_SCANCODE_KP_D', 191);
define('SDL_SCANCODE_KP_E', 192);
define('SDL_SCANCODE_KP_F', 193);
define('SDL_SCANCODE_KP_XOR', 194);
define('SDL_SCANCODE_KP_POWER', 195);
define('SDL_SCANCODE_KP_PERCENT', 196);
define('SDL_SCANCODE_KP_LESS', 197);
define('SDL_SCANCODE_KP_GREATER', 198);
define('SDL_SCANCODE_KP_AMPERSAND', 199);
define('SDL_SCANCODE_KP_DBLAMPERSAND', 200);
define('SDL_SCANCODE_KP_VERTICALBAR', 201);
define('SDL_SCANCODE_KP_DBLVERTICALBAR', 202);
define('SDL_SCANCODE_KP_COLON', 203);
define('SDL_SCANCODE_KP_HASH', 204);
define('SDL_SCANCODE_KP_SPACE', 205);
define('SDL_SCANCODE_KP_AT', 206);
define('SDL_SCANCODE_KP_EXCLAM', 207);
define('SDL_SCANCODE_KP_MEMSTORE', 208);
define('SDL_SCANCODE_KP_MEMRECALL', 209);
define('SDL_SCANCODE_KP_MEMCLEAR', 210);
define('SDL_SCANCODE_KP_MEMADD', 211);
define('SDL_SCANCODE_KP_MEMSUBTRACT', 212);
define('SDL_SCANCODE_KP_MEMMULTIPLY', 213);
define('SDL_SCANCODE_KP_MEMDIVIDE', 214);
define('SDL_SCANCODE_KP_PLUSMINUS', 215);
define('SDL_SCANCODE_KP_CLEAR', 216);
define('SDL_SCANCODE_KP_CLEARENTRY', 217);
define('SDL_SCANCODE_KP_BINARY', 218);
define('SDL_SCANCODE_KP_OCTAL', 219);
define('SDL_SCANCODE_KP_DECIMAL', 220);
define('SDL_SCANCODE_KP_HEXADECIMAL', 221);
define('SDL_SCANCODE_LCTRL', 224);
define('SDL_SCANCODE_LSHIFT', 225);
define('SDL_SCANCODE_LALT', 226);
define('SDL_SCANCODE_LGUI', 227);
define('SDL_SCANCODE_RCTRL', 228);
define('SDL_SCANCODE_RSHIFT', 229);
define('SDL_SCANCODE_RALT', 230);
define('SDL_SCANCODE_RGUI', 231);
define('SDL_SCANCODE_MODE', 257);
define('SDL_SCANCODE_AUDIONEXT', 258);
define('SDL_SCANCODE_AUDIOPREV', 259);
define('SDL_SCANCODE_AUDIOSTOP', 260);
define('SDL_SCANCODE_AUDIOPLAY', 261);
define('SDL_SCANCODE_AUDIOMUTE', 262);
define('SDL_SCANCODE_MEDIASELECT', 263);
define('SDL_SCANCODE_WWW', 264);
define('SDL_SCANCODE_MAIL', 265);
define('SDL_SCANCODE_CALCULATOR', 266);
define('SDL_SCANCODE_COMPUTER', 267);
define('SDL_SCANCODE_AC_SEARCH', 268);
define('SDL_SCANCODE_AC_HOME', 269);
define('SDL_SCANCODE_AC_BACK', 270);
define('SDL_SCANCODE_AC_FORWARD', 271);
define('SDL_SCANCODE_AC_STOP', 272);
define('SDL_SCANCODE_AC_REFRESH', 273);
define('SDL_SCANCODE_AC_BOOKMARKS', 274);
define('SDL_SCANCODE_BRIGHTNESSDOWN', 275);
define('SDL_SCANCODE_BRIGHTNESSUP', 276);
define('SDL_SCANCODE_DISPLAYSWITCH', 277);
define('SDL_SCANCODE_KBDILLUMTOGGLE', 278);
define('SDL_SCANCODE_KBDILLUMDOWN', 279);
define('SDL_SCANCODE_KBDILLUMUP', 280);
define('SDL_SCANCODE_EJECT', 281);
define('SDL_SCANCODE_SLEEP', 282);
define('SDL_SCANCODE_APP1', 283);
define('SDL_SCANCODE_APP2', 284);
define('SDL_NUM_SCANCODES', 512);
define('SDLK_UNKNOWN', 0);
define('SDLK_RETURN', 13);
define('SDLK_ESCAPE', 27);
define('SDLK_BACKSPACE', 8);
define('SDLK_TAB', 9);
define('SDLK_SPACE', 32);
define('SDLK_EXCLAIM', 33);
define('SDLK_QUOTEDBL', 34);
define('SDLK_HASH', 35);
define('SDLK_PERCENT', 37);
define('SDLK_DOLLAR', 36);
define('SDLK_AMPERSAND', 38);
define('SDLK_QUOTE', 39);
define('SDLK_LEFTPAREN', 40);
define('SDLK_RIGHTPAREN', 41);
define('SDLK_ASTERISK', 42);
define('SDLK_PLUS', 43);
define('SDLK_COMMA', 44);
define('SDLK_MINUS', 45);
define('SDLK_PERIOD', 46);
define('SDLK_SLASH', 47);
define('SDLK_0', 48);
define('SDLK_1', 49);
define('SDLK_2', 50);
define('SDLK_3', 51);
define('SDLK_4', 52);
define('SDLK_5', 53);
define('SDLK_6', 54);
define('SDLK_7', 55);
define('SDLK_8', 56);
define('SDLK_9', 57);
define('SDLK_COLON', 58);
define('SDLK_SEMICOLON', 59);
define('SDLK_LESS', 60);
define('SDLK_EQUALS', 61);
define('SDLK_GREATER', 62);
define('SDLK_QUESTION', 63);
define('SDLK_AT', 64);
define('SDLK_LEFTBRACKET', 91);
define('SDLK_BACKSLASH', 92);
define('SDLK_RIGHTBRACKET', 93);
define('SDLK_CARET', 94);
define('SDLK_UNDERSCORE', 95);
define('SDLK_BACKQUOTE', 96);
define('SDLK_a', 97);
define('SDLK_b', 98);
define('SDLK_c', 99);
define('SDLK_d', 100);
define('SDLK_e', 101);
define('SDLK_f', 102);
define('SDLK_g', 103);
define('SDLK_h', 104);
define('SDLK_i', 105);
define('SDLK_j', 106);
define('SDLK_k', 107);
define('SDLK_l', 108);
define('SDLK_m', 109);
define('SDLK_n', 110);
define('SDLK_o', 111);
define('SDLK_p', 112);
define('SDLK_q', 113);
define('SDLK_r', 114);
define('SDLK_s', 115);
define('SDLK_t', 116);
define('SDLK_u', 117);
define('SDLK_v', 118);
define('SDLK_w', 119);
define('SDLK_x', 120);
define('SDLK_y', 121);
define('SDLK_z', 122);
define('SDLK_CAPSLOCK', 1073741881);
define('SDLK_F1', 1073741882);
define('SDLK_F2', 1073741883);
define('SDLK_F3', 1073741884);
define('SDLK_F4', 1073741885);
define('SDLK_F5', 1073741886);
define('SDLK_F6', 1073741887);
define('SDLK_F7', 1073741888);
define('SDLK_F8', 1073741889);
define('SDLK_F9', 1073741890);
define('SDLK_F10', 1073741891);
define('SDLK_F11', 1073741892);
define('SDLK_F12', 1073741893);
define('SDLK_PRINTSCREEN', 1073741894);
define('SDLK_SCROLLLOCK', 1073741895);
define('SDLK_PAUSE', 1073741896);
define('SDLK_INSERT', 1073741897);
define('SDLK_HOME', 1073741898);
define('SDLK_PAGEUP', 1073741899);
define('SDLK_DELETE', 127);
define('SDLK_END', 1073741901);
define('SDLK_PAGEDOWN', 1073741902);
define('SDLK_RIGHT', 1073741903);
define('SDLK_LEFT', 1073741904);
define('SDLK_DOWN', 1073741905);
define('SDLK_UP', 1073741906);
define('SDLK_NUMLOCKCLEAR', 1073741907);
define('SDLK_KP_DIVIDE', 1073741908);
define('SDLK_KP_MULTIPLY', 1073741909);
define('SDLK_KP_MINUS', 1073741910);
define('SDLK_KP_PLUS', 1073741911);
define('SDLK_KP_ENTER', 1073741912);
define('SDLK_KP_1', 1073741913);
define('SDLK_KP_2', 1073741914);
define('SDLK_KP_3', 1073741915);
define('SDLK_KP_4', 1073741916);
define('SDLK_KP_5', 1073741917);
define('SDLK_KP_6', 1073741918);
define('SDLK_KP_7', 1073741919);
define('SDLK_KP_8', 1073741920);
define('SDLK_KP_9', 1073741921);
define('SDLK_KP_0', 1073741922);
define('SDLK_KP_PERIOD', 1073741923);
define('SDLK_APPLICATION', 1073741925);
define('SDLK_POWER', 1073741926);
define('SDLK_KP_EQUALS', 1073741927);
define('SDLK_F13', 1073741928);
define('SDLK_F14', 1073741929);
define('SDLK_F15', 1073741930);
define('SDLK_F16', 1073741931);
define('SDLK_F17', 1073741932);
define('SDLK_F18', 1073741933);
define('SDLK_F19', 1073741934);
define('SDLK_F20', 1073741935);
define('SDLK_F21', 1073741936);
define('SDLK_F22', 1073741937);
define('SDLK_F23', 1073741938);
define('SDLK_F24', 1073741939);
define('SDLK_EXECUTE', 1073741940);
define('SDLK_HELP', 1073741941);
define('SDLK_MENU', 1073741942);
define('SDLK_SELECT', 1073741943);
define('SDLK_STOP', 1073741944);
define('SDLK_AGAIN', 1073741945);
define('SDLK_UNDO', 1073741946);
define('SDLK_CUT', 1073741947);
define('SDLK_COPY', 1073741948);
define('SDLK_PASTE', 1073741949);
define('SDLK_FIND', 1073741950);
define('SDLK_MUTE', 1073741951);
define('SDLK_VOLUMEUP', 1073741952);
define('SDLK_VOLUMEDOWN', 1073741953);
define('SDLK_KP_COMMA', 1073741957);
define('SDLK_KP_EQUALSAS400', 1073741958);
define('SDLK_ALTERASE', 1073741977);
define('SDLK_SYSREQ', 1073741978);
define('SDLK_CANCEL', 1073741979);
define('SDLK_CLEAR', 1073741980);
define('SDLK_PRIOR', 1073741981);
define('SDLK_RETURN2', 1073741982);
define('SDLK_SEPARATOR', 1073741983);
define('SDLK_OUT', 1073741984);
define('SDLK_OPER', 1073741985);
define('SDLK_CLEARAGAIN', 1073741986);
define('SDLK_CRSEL', 1073741987);
define('SDLK_EXSEL', 1073741988);
define('SDLK_KP_00', 1073742000);
define('SDLK_KP_000', 1073742001);
define('SDLK_THOUSANDSSEPARATOR', 1073742002);
define('SDLK_DECIMALSEPARATOR', 1073742003);
define('SDLK_CURRENCYUNIT', 1073742004);
define('SDLK_CURRENCYSUBUNIT', 1073742005);
define('SDLK_KP_LEFTPAREN', 1073742006);
define('SDLK_KP_RIGHTPAREN', 1073742007);
define('SDLK_KP_LEFTBRACE', 1073742008);
define('SDLK_KP_RIGHTBRACE', 1073742009);
define('SDLK_KP_TAB', 1073742010);
define('SDLK_KP_BACKSPACE', 1073742011);
define('SDLK_KP_A', 1073742012);
define('SDLK_KP_B', 1073742013);
define('SDLK_KP_C', 1073742014);
define('SDLK_KP_D', 1073742015);
define('SDLK_KP_E', 1073742016);
define('SDLK_KP_F', 1073742017);
define('SDLK_KP_XOR', 1073742018);
define('SDLK_KP_POWER', 1073742019);
define('SDLK_KP_PERCENT', 1073742020);
define('SDLK_KP_LESS', 1073742021);
define('SDLK_KP_GREATER', 1073742022);
define('SDLK_KP_AMPERSAND', 1073742023);
define('SDLK_KP_DBLAMPERSAND', 1073742024);
define('SDLK_KP_VERTICALBAR', 1073742025);
define('SDLK_KP_DBLVERTICALBAR', 1073742026);
define('SDLK_KP_COLON', 1073742027);
define('SDLK_KP_HASH', 1073742028);
define('SDLK_KP_SPACE', 1073742029);
define('SDLK_KP_AT', 1073742030);
define('SDLK_KP_EXCLAM', 1073742031);
define('SDLK_KP_MEMSTORE', 1073742032);
define('SDLK_KP_MEMRECALL', 1073742033);
define('SDLK_KP_MEMCLEAR', 1073742034);
define('SDLK_KP_MEMADD', 1073742035);
define('SDLK_KP_MEMSUBTRACT', 1073742036);
define('SDLK_KP_MEMMULTIPLY', 1073742037);
define('SDLK_KP_MEMDIVIDE', 1073742038);
define('SDLK_KP_PLUSMINUS', 1073742039);
define('SDLK_KP_CLEAR', 1073742040);
define('SDLK_KP_CLEARENTRY', 1073742041);
define('SDLK_KP_BINARY', 1073742042);
define('SDLK_KP_OCTAL', 1073742043);
define('SDLK_KP_DECIMAL', 1073742044);
define('SDLK_KP_HEXADECIMAL', 1073742045);
define('SDLK_LCTRL', 1073742048);
define('SDLK_LSHIFT', 1073742049);
define('SDLK_LALT', 1073742050);
define('SDLK_LGUI', 1073742051);
define('SDLK_RCTRL', 1073742052);
define('SDLK_RSHIFT', 1073742053);
define('SDLK_RALT', 1073742054);
define('SDLK_RGUI', 1073742055);
define('SDLK_MODE', 1073742081);
define('SDLK_AUDIONEXT', 1073742082);
define('SDLK_AUDIOPREV', 1073742083);
define('SDLK_AUDIOSTOP', 1073742084);
define('SDLK_AUDIOPLAY', 1073742085);
define('SDLK_AUDIOMUTE', 1073742086);
define('SDLK_MEDIASELECT', 1073742087);
define('SDLK_WWW', 1073742088);
define('SDLK_MAIL', 1073742089);
define('SDLK_CALCULATOR', 1073742090);
define('SDLK_COMPUTER', 1073742091);
define('SDLK_AC_SEARCH', 1073742092);
define('SDLK_AC_HOME', 1073742093);
define('SDLK_AC_BACK', 1073742094);
define('SDLK_AC_FORWARD', 1073742095);
define('SDLK_AC_STOP', 1073742096);
define('SDLK_AC_REFRESH', 1073742097);
define('SDLK_AC_BOOKMARKS', 1073742098);
define('SDLK_BRIGHTNESSDOWN', 1073742099);
define('SDLK_BRIGHTNESSUP', 1073742100);
define('SDLK_DISPLAYSWITCH', 1073742101);
define('SDLK_KBDILLUMTOGGLE', 1073742102);
define('SDLK_KBDILLUMDOWN', 1073742103);
define('SDLK_KBDILLUMUP', 1073742104);
define('SDLK_EJECT', 1073742105);
define('SDLK_SLEEP', 1073742106);
define('KMOD_NONE', 0);
define('KMOD_LSHIFT', 1);
define('KMOD_RSHIFT', 2);
define('KMOD_LCTRL', 64);
define('KMOD_RCTRL', 128);
define('KMOD_LALT', 256);
define('KMOD_RALT', 512);
define('KMOD_LGUI', 1024);
define('KMOD_RGUI', 2048);
define('KMOD_NUM', 4096);
define('KMOD_CAPS', 8192);
define('KMOD_MODE', 16384);
define('KMOD_RESERVED', 32768);
define('KMOD_CTRL', 192);
define('KMOD_SHIFT', 3);
define('KMOD_ALT', 768);
define('KMOD_GUI', 3072);
define('SDL_MESSAGEBOX_ERROR', 16);
define('SDL_MESSAGEBOX_WARNING', 32);
define('SDL_MESSAGEBOX_INFORMATION', 64);
define('SDL_MESSAGEBOX_BUTTON_RETURNKEY_DEFAULT', 1);
define('SDL_MESSAGEBOX_BUTTON_ESCAPEKEY_DEFAULT', 2);
define('SDL_MESSAGEBOX_COLOR_BACKGROUND', 0);
define('SDL_MESSAGEBOX_COLOR_TEXT', 1);
define('SDL_MESSAGEBOX_COLOR_BUTTON_BORDER', 2);
define('SDL_MESSAGEBOX_COLOR_BUTTON_BACKGROUND', 3);
define('SDL_MESSAGEBOX_COLOR_BUTTON_SELECTED', 4);
define('SDL_MESSAGEBOX_COLOR_MAX', 5);
define('SDL_SYSTEM_CURSOR_ARROW', 0);
define('SDL_SYSTEM_CURSOR_IBEAM', 1);
define('SDL_SYSTEM_CURSOR_WAIT', 2);
define('SDL_SYSTEM_CURSOR_CROSSHAIR', 3);
define('SDL_SYSTEM_CURSOR_WAITARROW', 4);
define('SDL_SYSTEM_CURSOR_SIZENWSE', 5);
define('SDL_SYSTEM_CURSOR_SIZENESW', 6);
define('SDL_SYSTEM_CURSOR_SIZEWE', 7);
define('SDL_SYSTEM_CURSOR_SIZENS', 8);
define('SDL_SYSTEM_CURSOR_SIZEALL', 9);
define('SDL_SYSTEM_CURSOR_NO', 10);
define('SDL_SYSTEM_CURSOR_HAND', 11);
define('SDL_NUM_SYSTEM_CURSORS', 12);
define('SDL_BUTTON_LEFT', 1);
define('SDL_BUTTON_MIDDLE', 2);
define('SDL_BUTTON_RIGHT', 3);
define('SDL_BUTTON_X1', 4);
define('SDL_BUTTON_X2', 5);
define('SDL_BUTTON_LMASK', 1);
define('SDL_BUTTON_MMASK', 2);
define('SDL_BUTTON_RMASK', 4);
define('SDL_BUTTON_X1MASK', 8);
define('SDL_BUTTON_X2MASK', 16);
define('SDL_MUTEX_TIMEDOUT', 1);
define('SDL_MUTEX_MAXWAIT', 4294967295);
define('SDL_POWERSTATE_UNKNOWN', 0);
define('SDL_POWERSTATE_ON_BATTERY', 1);
define('SDL_POWERSTATE_NO_BATTERY', 2);
define('SDL_POWERSTATE_CHARGING', 3);
define('SDL_POWERSTATE_CHARGED', 4);
define('SDL_PIXELTYPE_UNKNOWN', 0);
define('SDL_PIXELTYPE_INDEX1', 1);
define('SDL_PIXELTYPE_INDEX4', 2);
define('SDL_PIXELTYPE_INDEX8', 3);
define('SDL_PIXELTYPE_PACKED8', 4);
define('SDL_PIXELTYPE_PACKED16', 5);
define('SDL_PIXELTYPE_PACKED32', 6);
define('SDL_PIXELTYPE_ARRAYU8', 7);
define('SDL_PIXELTYPE_ARRAYU16', 8);
define('SDL_PIXELTYPE_ARRAYU32', 9);
define('SDL_PIXELTYPE_ARRAYF16', 10);
define('SDL_PIXELTYPE_ARRAYF32', 11);
define('SDL_BITMAPORDER_NONE', 0);
define('SDL_BITMAPORDER_4321', 1);
define('SDL_BITMAPORDER_1234', 2);
define('SDL_PACKEDORDER_NONE', 0);
define('SDL_PACKEDORDER_XRGB', 1);
define('SDL_PACKEDORDER_RGBX', 2);
define('SDL_PACKEDORDER_ARGB', 3);
define('SDL_PACKEDORDER_RGBA', 4);
define('SDL_PACKEDORDER_XBGR', 5);
define('SDL_PACKEDORDER_BGRX', 6);
define('SDL_PACKEDORDER_ABGR', 7);
define('SDL_PACKEDORDER_BGRA', 8);
define('SDL_PACKEDLAYOUT_NONE', 0);
define('SDL_PACKEDLAYOUT_332', 1);
define('SDL_PACKEDLAYOUT_4444', 2);
define('SDL_PACKEDLAYOUT_1555', 3);
define('SDL_PACKEDLAYOUT_5551', 4);
define('SDL_PACKEDLAYOUT_565', 5);
define('SDL_PACKEDLAYOUT_8888', 6);
define('SDL_PACKEDLAYOUT_2101010', 7);
define('SDL_PACKEDLAYOUT_1010102', 8);
define('SDL_PIXELFORMAT_UNKNOWN', 0);
define('SDL_PIXELFORMAT_INDEX1LSB', 286261504);
define('SDL_PIXELFORMAT_INDEX1MSB', 287310080);
define('SDL_PIXELFORMAT_INDEX4LSB', 303039488);
define('SDL_PIXELFORMAT_INDEX4MSB', 304088064);
define('SDL_PIXELFORMAT_INDEX8', 318769153);
define('SDL_PIXELFORMAT_RGB332', 336660481);
define('SDL_PIXELFORMAT_RGB444', 353504258);
define('SDL_PIXELFORMAT_RGB555', 353570562);
define('SDL_PIXELFORMAT_BGR555', 357764866);
define('SDL_PIXELFORMAT_ARGB4444', 355602434);
define('SDL_PIXELFORMAT_RGBA4444', 356651010);
define('SDL_PIXELFORMAT_ABGR4444', 359796738);
define('SDL_PIXELFORMAT_BGRA4444', 360845314);
define('SDL_PIXELFORMAT_ARGB1555', 355667970);
define('SDL_PIXELFORMAT_RGBA5551', 356782082);
define('SDL_PIXELFORMAT_ABGR1555', 359862274);
define('SDL_PIXELFORMAT_BGRA5551', 360976386);
define('SDL_PIXELFORMAT_RGB565', 353701890);
define('SDL_PIXELFORMAT_BGR565', 357896194);
define('SDL_PIXELFORMAT_RGB24', 386930691);
define('SDL_PIXELFORMAT_BGR24', 390076419);
define('SDL_PIXELFORMAT_RGB888', 370546692);
define('SDL_PIXELFORMAT_RGBX8888', 371595268);
define('SDL_PIXELFORMAT_BGR888', 374740996);
define('SDL_PIXELFORMAT_BGRX8888', 375789572);
define('SDL_PIXELFORMAT_ARGB8888', 372645892);
define('SDL_PIXELFORMAT_RGBA8888', 373694468);
define('SDL_PIXELFORMAT_ABGR8888', 376840196);
define('SDL_PIXELFORMAT_BGRA8888', 377888772);
define('SDL_PIXELFORMAT_ARGB2101010', 372711428);
define('SDL_PIXELFORMAT_YV12', 842094169);
define('SDL_PIXELFORMAT_IYUV', 1448433993);
define('SDL_PIXELFORMAT_YUY2', 844715353);
define('SDL_PIXELFORMAT_UYVY', 1498831189);
define('SDL_PIXELFORMAT_YVYU', 1431918169);
define('SDL_RENDERER_SOFTWARE', 1);
define('SDL_RENDERER_ACCELERATED', 2);
define('SDL_RENDERER_PRESENTVSYNC', 4);
define('SDL_RENDERER_TARGETTEXTURE', 8);
define('SDL_UNKNOWN', 0);
define('SDL_WINFILE', 1);
define('SDL_STDFILE', 2);
define('SDL_JNIFILE', 3);
define('SDL_MEMORY', 4);
define('SDL_MEMORY_RO', 5);
define('RW_SEEK_SET', 0);
define('RW_SEEK_CUR', 1);
define('RW_SEEK_END', 2);
define('SDL_INIT_TIMER', 1);
define('SDL_INIT_AUDIO', 16);
define('SDL_INIT_VIDEO', 32);
define('SDL_INIT_JOYSTICK', 512);
define('SDL_INIT_HAPTIC', 4096);
define('SDL_INIT_GAMECONTROLLER', 8192);
define('SDL_INIT_EVENTS', 16384);
define('SDL_INIT_NOPARACHUTE', 1048576);
define('SDL_INIT_EVERYTHING', 29233);
define('ShapeModeDefault', 0);
define('ShapeModeBinarizeAlpha', 1);
define('ShapeModeReverseBinarizeAlpha', 2);
define('ShapeModeColorKey', 3);
define('SDL_NONSHAPEABLE_WINDOW', -1);
define('SDL_INVALID_SHAPE_ARGUMENT', -2);
define('SDL_WINDOW_LACKS_SHAPE', -3);
define('SDL_SWSURFACE', 0);
define('SDL_PREALLOC', 1);
define('SDL_RLEACCEL', 2);
define('SDL_DONTFREE', 4);
define('SDL_COMPILEDVERSION', 2008);
define('SDL_MAJOR_VERSION', 2);
define('SDL_MINOR_VERSION', 0);
define('SDL_PATCHLEVEL', 8);
define('SDL_REVISION', 'hg-11914:f1084c419f33');
define('SDL_WINDOW_FULLSCREEN', 1);
define('SDL_WINDOW_OPENGL', 2);
define('SDL_WINDOW_SHOWN', 4);
define('SDL_WINDOW_HIDDEN', 8);
define('SDL_WINDOW_BORDERLESS', 16);
define('SDL_WINDOW_RESIZABLE', 32);
define('SDL_WINDOW_MINIMIZED', 64);
define('SDL_WINDOW_MAXIMIZED', 128);
define('SDL_WINDOW_INPUT_GRABBED', 256);
define('SDL_WINDOW_INPUT_FOCUS', 512);
define('SDL_WINDOW_MOUSE_FOCUS', 1024);
define('SDL_WINDOW_FULLSCREEN_DESKTOP', 4097);
define('SDL_WINDOW_FOREIGN', 2048);
define('SDL_WINDOW_ALLOW_HIGHDPI', 8192);
define('SDL_WINDOWPOS_UNDEFINED_MASK', 536805376);
define('SDL_WINDOWPOS_UNDEFINED', 536805376);
define('SDL_WINDOWPOS_CENTERED_MASK', 805240832);
define('SDL_WINDOWPOS_CENTERED', 805240832);
